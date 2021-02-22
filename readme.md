
## Installation
1. Open your terminal and go to your `~/htdocs` folder.
2. Clone this repository `git clone https://github.com/rizalihwan/ppdb-online.git`
3. Go inside to folder by `cd ppdb-online`
4. Run `composer install`
5. Create `.env` file with command `cp .env.example .env`
6. Generate key inside `.env` file by `php artisan key:generate`
7. Start your XAMPP service
8. Create database on XAMPP, example name: `db_laravel`
9. Open `.env` file and config your database:
    ```sh
    DB_DATABASE='db_laravel'
10. Start your local server `php artisan serve`
11. Open link `localhost:8000` as default on your browser

## Contributing

Thank you for considering contributing to my project! How to contribute:
1. Fork this Application
2. Create branch `git checkout -b yourName/develop`
3. Commit your contribution `git commit -m "New Feature has been Added"`
4. Push to your branch `git push origin yourName/develop`
5. Create Pull Request

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact Info

Feel free to ask me at
- [Telegram](https://t.me/ihw_me/).
