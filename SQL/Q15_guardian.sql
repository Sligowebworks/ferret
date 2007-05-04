
SELECT a.School,  COUNT(a.ID) as `Count`, AVG(b.Age) as `Avg. Age`, AVG(`Household Count`) as `Avg. kids in household`
FROM 
	union_schools a
LEFT JOIN
	household_count b
on a.ID = b.ID
GROUP BY a.School
ORDER BY `Count` DESC;

SELECT a.School,  a.Gender, COUNT(a.ID) as `Count`, AVG(b.Age) as `Avg. Age`, AVG(`Household Count`) as `Avg. kids in household`
FROM 
	union_schools a
LEFT JOIN
	household_count b
on a.ID = b.ID
GROUP BY a.School, a.Gender
ORDER BY `Count` DESC, a.Gender;


