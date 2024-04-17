# 11 - 20 件目のレコード選択
SELECT * FROM users LIMIT 10 OFFSET 10;

# emailアドレスに「.com」を含むユーザの一覧をすべてだす
SELECT * FROM users WHERE email LIKE '%.com%';

# emailアドレスに「.com」を含むユーザの件数（けんすう）をだしてください
SELECT COUNT(id) AS user_count
    FROM users 
    WHERE email LIKE '%.com%';

# id が 2 5 8 11 のユーザ一覧をだす
SELECT * FROM users WHERE id = 2 OR id = 5 OR id = 8 OR id = 11;

SELECT * FROM users WHERE id in (2, 5, 8, 11);