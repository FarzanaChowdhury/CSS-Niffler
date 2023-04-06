<?php
include("config.php");

$sql="
CREATE OR REPLACE TRIGGER addRow
AFTER INSERT
ON user
FOR EACH ROW
BEGIN
INSERT INTO Progress(UserID, Topic, Level, Score) Values (new.uid, 'Grid', 1, 0);
INSERT INTO Progress(UserID, Topic, Level, Score) Values (new.uid, 'Flexbox', 1, 0);
END;
";

$result=$conn->query($sql);
if(!$result)
die("Failed to add row for the user");

header("Location:login.php");
?>
