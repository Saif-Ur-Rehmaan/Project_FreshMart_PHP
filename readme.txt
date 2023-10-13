=======================================================================================================
/*Daily discount procedure to return the product id which is not present in discount table*/
DELIMITER //
CREATE PROCEDURE DailyDiscount(
    OUT productIdNotInDailySale INT,
    OUT b INT
)
BEGIN
    DECLARE randomProductId INT;

    -- Initialize b to 0
    SET b = 0;

    -- Generate a random product ID
    SET randomProductId = FLOOR(RAND() * (SELECT COUNT(*) FROM products)) + 1;

    WHILE b = 0 DO
        -- Check if the random product ID exists in the daily sale table
        SELECT COUNT(*) INTO b FROM daily_sale WHERE product_id = randomProductId;

        IF b = 0 THEN
            -- If b is still 0, it means the product ID doesn't exist in the daily sale table, set it to productIdNotInDailySale
            SET productIdNotInDailySale = randomProductId;
        ELSE
            -- If b is not 0, it means the product ID already exists in the daily sale table, generate a new random ID
            SET randomProductId = FLOOR(RAND() * (SELECT COUNT(*) FROM products)) + 1;
        END IF;
    END WHILE;

END;
//

DELIMITER ;

=======================================================================================================