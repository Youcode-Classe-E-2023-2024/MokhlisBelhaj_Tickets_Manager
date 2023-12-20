<?php
class Dashboard extends controller
{
    protected $user;
    protected $tags;
    protected $priorite;
    protected $ticket;
    public function __construct()
    {
        $this->user = $this->model('Users');
        $this->tags = $this->model('Tags');
        $this->priorite = $this->model('priorite');
        $this->ticket = $this->model('Ticket');

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

        $data = [
            'user' => $users,
            'tags' => $tags,
            'priorites' => $priorites,
        ];


        $this->view('index', $data);
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
    public function getticket() {
        if($_POST['filter']=='1'){
           $data = $this->ticket->alltiket();
            return $data;
        }elseif($_POST['filter']== '2'){
        
            $this->ticket->createdtiket();
            die();

        }else{
            $this->ticket->assignTiket();
            die();
        }
        

    }
}
