SELECT PARTS.PartNum, ORDERS.NumberOrdered, PARTS.ListPrice
FROM ORDERS, PARTS
WHERE ORDERS.PartNum = PARTS.PartNum AND PARTS.Warehouse = 'Melbourne';
