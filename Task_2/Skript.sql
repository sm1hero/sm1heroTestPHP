SELECT 
    a.author_name, a.author_surname, a.author_otch, COUNT(*) books
FROM
    author a,
    authorbook ab
WHERE
    ab.author_id = a.author_id
GROUP BY 
	a.author_name
HAVING COUNT(*) <= 10
