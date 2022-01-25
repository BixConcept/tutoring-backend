<?php
class User {
    private $conn;
    private $table = "users";

    public $id;
    public $first_name;
    public $last_name;
    public $grade;
    public $email;
    public $phone_number;
    public $misc;
    public $authorization;
    public $created_at;
    public $updated_at;

    public $is_teacher;
    public $teaches; // an array subject ids and grades?

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT 
            u.id,
            u.first_name,
            u.last_name,
            u.grade AS user_grade,
            u.email,
            u.phone,
            u.misc,
            u.authorization,
            u.created_at,
            u.updated_at,
            t.subject_id,
            s.name,
            t.grade
        FROM user AS u
        LEFT JOIN
            tutors AS t ON u.id = t.user_id
        LEFT JOIN
            subject AS s ON t.subject_id = s.id
        ORDER BY
            u.updated_at DESC;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
