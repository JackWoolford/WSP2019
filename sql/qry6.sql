SELECT SUM(ORDERS.QuotedPrice)
FROM CUSTOMER, ORDERS
WHERE CUSTOMER.State = 'VIC';