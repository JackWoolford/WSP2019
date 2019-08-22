SELECT Category, AVG(ListPrice)
FROM PARTS
GROUP BY Category;