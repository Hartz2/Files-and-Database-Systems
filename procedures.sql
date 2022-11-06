DELIMITER $$
CREATE PROCEDURE listTeams()
BEGIN
SELECT Team FROM Teams;
END $$

DELIMITER $$
CALL listTeams() $$

/************************************************************************************************************************************************************************/

DELIMITER $$
CREATE PROCEDURE playerTeam(name varchar(20))
BEGIN
SELECT Player, Team FROM Players
WHERE Player = name;
END $$

DELIMITER $$
CALL playerTeam('Cletis') $$

/************************************************************************************************************************************************************************/

DELIMITER $$
CREATE PROCEDURE get_schedule(name varchar(20))
BEGIN
SELECT Player, when_game AS be_there, Verses.Host AS snack,
Verses.Team AS against, Verses.Coach AS lead_by
FROM Players JOIN Schedule ON Schedule.Team = Players.Team
JOIN Verses ON Verses.Host != Schedule.Host
AND Verses.GameID = Schedule.GameID
JOIN Games ON Games.GameID = Verses.GameID 
WHERE Player = name;
END $$

DELIMITER $$
CALL get_schedule('Cletis') $$
