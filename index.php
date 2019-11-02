<body>

<h1>Famous Cities</h1>

<h2>Tokyo</h2>
<p>Tokyo is the capital of Japan, the center of the Greater Tokyo Area,
and the most populous metropolitan area in the world.
It is the seat of the Japanese government and the Imperial Palace,
and the home of the Japanese Imperial Family.</p>

<?php  /* If the error is due to calling mysqli in a class */

    class dbconnect extends mysqli{

        private $host = 'localhost';
        private $user = 'root';
        private $pass = '123456';
        private $db = 'db';

        public function __construct() {
            parent::__construct($this->host, $this->user, $this->pass, $this->db);

            if (mysqli_connect_error()) {
                die('Connect Error (' . mysqli_connect_errno() . ') ' .
                    mysqli_connect_error());
            }
        }
    }

phpinfo();

?>

</body>