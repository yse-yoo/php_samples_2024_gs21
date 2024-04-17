# 11 - 20 件目のレコード選択
SELECT * FROM users LIMIT 10 OFFSET 10;

# emailアドレスに「.com」を含むユーザの一覧をすべてだす
SELECT * FROM users WHERE email LIKE '%.com%';

# emailアドレスに「.com」を含むユーザの件数（けんすう）をだしてください
SELECT COUNT(id) FROM users WHERE email LIKE '%.com%';