SELECT
    `destinations`.`id` AS `destination_id_a_renommer`,
    `destinations`.`price`,
    `destinations`.`location`,
    `destinations`.`id_tour_operator`,
	`destinations`.`images`,
	 `tour_operators`.`name` AS `tour_operator_a_renommer`,
	 `tour_operators`.`link`
FROM
    `destinations`
LEFT JOIN
	`tour_operators`
ON
	`destinations`.`id_tour_operator` = `tour_operators`.`id`