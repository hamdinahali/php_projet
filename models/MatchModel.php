<?php
class MatchModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUpcomingMatches() {
        $query = "SELECT m.*, 
                 th.name as home_team, ta.name as away_team, 
                 s.name as stadium, s.location
                 FROM matches m
                 JOIN teams th ON m.team_home_id = th.id
                 JOIN teams ta ON m.team_away_id = ta.id
                 JOIN stadiums s ON m.stadium_id = s.id
                 WHERE m.match_date > NOW()
                 ORDER BY m.match_date ASC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMatchById($id) {
        $query = "SELECT m.*, 
                 th.name as home_team, ta.name as away_team, 
                 s.name as stadium, s.location
                 FROM matches m
                 JOIN teams th ON m.team_home_id = th.id
                 JOIN teams ta ON m.team_away_id = ta.id
                 JOIN stadiums s ON m.stadium_id = s.id
                 WHERE m.id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getTicketCategories($matchId) {
        $query = "SELECT * FROM ticket_categories WHERE match_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$matchId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}