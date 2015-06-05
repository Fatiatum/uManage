<?php
//get topics from project (with users id)
function getTopics($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT * FROM topic,(SELECT project_id FROM project WHERE name=:name) AS idproj, WHERE topic.forum_id=idproj.project_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}

//get comments from topic
function getComments($name) {
  global $conn;
  $stmt = $conn->prepare("SELECT date,text FROM comment_forum,(SELECT topic_id FROM topic,(SELECT project_id FROM project WHERE name=:name) AS idproj WHERE topic.forum_id=idproj.project_id) AS idtopic WHERE comment_forum.topic_id=idtopic.topic_id");
  $stmt->bindParam(':name', $name);
  $stmt->execute();
}


  ?>