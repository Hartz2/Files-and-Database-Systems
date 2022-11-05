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


