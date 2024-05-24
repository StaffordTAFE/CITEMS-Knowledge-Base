<?php

include 'config.php';

class question extends config
{
    // fetch all questions
    public function getQuestions()
    {
        // select all bar paintingImage from paintings
        $sql = "SELECT questionId, question, content_questions.description, answer
        FROM content_questions
        ORDER BY questionId;";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }

        return $results;
    }
}
