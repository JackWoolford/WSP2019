SELECT CUSTOMER.CustID, CUSTOMER.Postcode, ORDERS.OrderNum
FROM CUSTOMER, ORDERS, PARTS
WHERE CUSTOMER.CustID = ORDERS.CustID AND ORDERS.PartNum = PARTS.PartNum AND PARTS.Category = 'CPUs';