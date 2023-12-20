<?php
class Dashboard extends controller
{
    protected $user;
    protected $tags;
    protected $priorite;
    protected $ticket;
    protected $comm;
    public function __construct()
    {
        $this->user = $this->model('Users');
        $this->tags = $this->model('Tags');
        $this->priorite = $this->model('priorite');
        $this->ticket = $this->model('Ticket');
        $this->comm = $this->model('commentaires');


        if (empty($_SESSION)) {
            $data = [
                'login' => 'false',
            ];
            $this->view('autho', $data);
        }
    }
    public function index()
    {
        $users = $this->user->getUser();
        $tags = $this->tags->gettags();
        $priorites = $this->priorite->getpriorite();
        $contUsers = $this->user->getTotalUsersCount();
        $contTicket = $this->ticket->getTotalTicketCount();

        $data = [
            'user' => $users,
            'tags' => $tags,
            'priorites' => $priorites,
            'contUsers'=>$contUsers,
            'contTicket'=>$contTicket
        ];


        $this->view('index', $data);
    }
    
    public function detail($id)
    {
        $detail= $this->ticket->detailTicket($id);
      
      
        $tag= $detail->tag_names;
        $tag=explode(',',$tag);
        $user= $detail->assigned_user_names;
        $user=explode(',',$user);
        $iduser= $detail->assignee_id;
        $iduser=explode(',',$iduser);
      
        $data=[
            'detail'=>$detail,
            'tag'=>$tag,
            'user'=>$user,
            'iduser'=>$iduser,
    
    ];

        
        $this->view('detail',$data);
    }
    public function add()
    {


        if (isset($_POST)) {

            $data = [
                'titre' => $_POST['titre'],
                'description' => $_POST['Description'],

                'priorite' => $_POST['priorite']
            ];
           
            $tic = $this->ticket->insertTicket($data);
            if ($tic == false) {
                echo "Error";
            } else {
                $datta = [
                    'idticket' => $tic,
                    'tags' => $_POST['selected_tags']
                ];
                foreach ($datta['tags'] as $tagId) {
                    $dataToInsert = [
                        'id_tickt' => $datta['idticket'],
                        'id_tag' => $tagId

                    ];

                    $this->tags->insertTag($dataToInsert);
                };
                $daata = [
                    'idticket' => $tic,
                    'selected_users' => $_POST['selected_users']
                ];

                foreach ($daata['selected_users'] as $userId) {
                    $dataToInsert = [
                        'id_tickt' => $daata['idticket'],
                        'id_user' => $userId
                    ];
                    $this->user->insertAssigne($dataToInsert);
                };
            }
        }
    }
    
    public function getCommentaire($id){
        $commen=$this->comm->getcommentaires($id);
        print_r( json_encode($commen));
        
    }
    
    public function insertCommentaire(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contenu'])) {
            $data = [
                'id_ticktet' => $_POST['id_ticktet'],
                'contenu' => $_POST['contenu'], // Change 'body' to match your textarea name attribute
            ];
    
            $this->comm->insertcommentaires($data);
    
            // Retrieve and return the updated comments (you may want to format it as needed)
            $comments = $this->comm->getcommentaires($data['id_ticktet']);
            echo json_encode($comments);
        }
    }
    public function getticket() {
        if($_POST['filter']=='1'){
           $data = $this->ticket->alltiket();
            return $data;
        }elseif($_POST['filter']== '2'){
        
            $this->ticket->createdtiket();
            

        }elseif($_POST['filter']== '3'){
            $this->ticket->assignTiket();
           
        }
        

    }
}
