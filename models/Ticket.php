<?php
class ticket
{
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }
public function insertTicket($data){
        // Set default values
        $data['id_user'] = $_SESSION['user_id'];
        $data['id_statu'] = 1;



        // Bind parameters
        $this->db->query("INSERT INTO `ticket`(`titre`, `description`, `id_user`, `id_statu`, `id_priorite`) 
        VALUES (:titre, :description, :id_user, :id_statu, :id_priorite)");
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':id_statu', $data['id_statu']);
        $this->db->bind(':id_priorite', $data['priorite']);
        $result = $this->db->execute();


        // Execute the query
        if ($result) {
            $lastInsertedId = $this->db->lastInsertId();
            return $lastInsertedId;
        } else {

            return false;
        }
}
    public function alltiket(){
        $this->db->query("SELECT
            t.id AS ticket_id,
            t.titre AS ticket_title,
            t.description AS ticket_description,
            t.created_at AS ticket_created_at,
            u.id AS user_id,
            u.name AS user_name,
            u.email AS user_email,
            s.id AS status_id,
            s.title AS status_title,
            s.color AS status_color,
            s.svg AS status_svg, -- Assuming 'svg' is the column name in 'statu' table
            p.id AS priority_id,
            p.title AS priority_title,
            p.color AS priority_color,
            GROUP_CONCAT(DISTINCT tt.id_tag) AS tag_ids,
            GROUP_CONCAT(DISTINCT tag.nameTag) AS tag_names,
            GROUP_CONCAT(DISTINCT a.id_user) AS assignee_id,
            GROUP_CONCAT(DISTINCT a.id_ticket) AS assigned_ticket_id
        FROM
            ticket t
            JOIN users u ON t.id_user = u.id
            JOIN statu s ON t.id_statu = s.id
            JOIN priorite p ON t.id_priorite = p.id
            LEFT JOIN tickettag tt ON t.id = tt.id_tickt
            LEFT JOIN tag ON tt.id_tag = tag.id
            LEFT JOIN assignation a ON t.id = a.id_ticket
        GROUP BY
            t.id, t.created_at
        ORDER BY
            t.created_at DESC;");
        $result = $this->db->resultset();
        if ($result) {
            echo (json_encode($result));
        } else {
            echo json_encode(['error' => 'Failed to fetch data']);
        }
}
public function createdtiket(){
        $id = $_SESSION['user_id'];
        $this->db->query("SELECT
            t.id AS ticket_id,
            t.titre AS ticket_title,
            t.description AS ticket_description,
            t.created_at AS ticket_created_at,
            u.id AS user_id,
            u.name AS user_name,
            u.email AS user_email,
            s.id AS status_id,
            s.title AS status_title,
            s.color AS status_color,
            s.svg AS status_svg, -- Assuming 'svg' is the column name in 'statu' table
            p.id AS priority_id,
            p.title AS priority_title,
            p.color AS priority_color,
            GROUP_CONCAT(DISTINCT tt.id_tag) AS tag_ids,
            GROUP_CONCAT(DISTINCT tag.nameTag) AS tag_names,
            GROUP_CONCAT(DISTINCT a.id_user) AS assignee_id,
            GROUP_CONCAT(DISTINCT a.id_ticket) AS assigned_ticket_id
        FROM
            ticket t
            JOIN users u ON t.id_user = u.id
            JOIN statu s ON t.id_statu = s.id
            JOIN priorite p ON t.id_priorite = p.id
            LEFT JOIN tickettag tt ON t.id = tt.id_tickt
            LEFT JOIN tag ON tt.id_tag = tag.id
            LEFT JOIN assignation a ON t.id = a.id_ticket
        WHERE
            u.id = :user_id
        GROUP BY
            t.id, t.created_at
        ORDER BY
        p.id DESC;");

        // Bind the parameter
        $this->db->bind(':user_id', $id);

        $result = $this->db->resultset();
        if ($result) {
            echo (json_encode($result));
        } else {
            echo json_encode(['error' => 'Failed to fetch data']);
        }
}
public function assignTiket() {
        $id = $_SESSION['user_id'];
        $this->db->query("SELECT
        t.id AS ticket_id,
        t.titre AS ticket_title,
        t.description AS ticket_description,
        t.created_at AS ticket_created_at,
        u.id AS user_id,
        u.name AS user_name,
        u.email AS user_email,
        s.id AS status_id,
        s.title AS status_title,
        s.color AS status_color,
        s.svg AS status_svg,
        p.id AS priority_id,
        p.title AS priority_title,
        p.color AS priority_color,
        GROUP_CONCAT(DISTINCT tt.id_tag) AS tag_ids,
        GROUP_CONCAT(DISTINCT tag.nameTag) AS tag_names,
        GROUP_CONCAT(DISTINCT a.id_user) AS assignee_id,
        GROUP_CONCAT(DISTINCT a.id_ticket) AS assigned_ticket_id
    FROM
        ticket t
        JOIN users u ON t.id_user = u.id
        JOIN statu s ON t.id_statu = s.id
        JOIN priorite p ON t.id_priorite = p.id
        LEFT JOIN tickettag tt ON t.id = tt.id_tickt
        LEFT JOIN tag ON tt.id_tag = tag.id
        JOIN assignation a ON t.id = a.id_ticket
    WHERE
        a.id_user = :user_id
    GROUP BY
        t.id
    ORDER BY
    p.id DESC;");

        // Bind the parameter
        $this->db->bind(':user_id', $id);

        $result = $this->db->resultset();
        if ($result) {
            echo (json_encode($result));
        } else {
            echo json_encode(['error' => 'Failed to fetch data']);
        }
}
public function detailTicket($id)
{
    $this->db->query("SELECT
    t.id AS ticket_id,
    t.titre AS ticket_title,
    t.description AS ticket_description,
    t.created_at AS ticket_created_at,
    u.id AS user_id,
    u.name AS user_name,
    u.email AS user_email,
    s.id AS status_id,
    s.title AS status_title,
    s.color AS status_color,
    s.svg AS status_svg, -- Assuming 'svg' is the column name in 'statu' table
    p.id AS priority_id,
    p.title AS priority_title,
    p.color AS priority_color,
    GROUP_CONCAT(DISTINCT tt.id_tag) AS tag_ids,
    GROUP_CONCAT(DISTINCT tag.nameTag) AS tag_names,
    GROUP_CONCAT(DISTINCT a.id_user) AS assignee_id,
    GROUP_CONCAT(DISTINCT a.id_ticket) AS assigned_ticket_id,
    GROUP_CONCAT(DISTINCT u_assign.name) AS assigned_user_names -- New column for assigned user names
FROM
    ticket t
    JOIN users u ON t.id_user = u.id
    JOIN statu s ON t.id_statu = s.id
    JOIN priorite p ON t.id_priorite = p.id
    LEFT JOIN tickettag tt ON t.id = tt.id_tickt
    LEFT JOIN tag ON tt.id_tag = tag.id
    LEFT JOIN assignation a ON t.id = a.id_ticket
    LEFT JOIN users u_assign ON a.id_user = u_assign.id -- Join to get assigned user names
WHERE
    t.id = :ticket_id
GROUP BY
    t.id");

    // Bind the parameter
    $this->db->bind(':ticket_id', $id);

    $result = $this->db->single(); 

    if ($result) {
        return $result;
    } else {
        return false;
    }
}


}
