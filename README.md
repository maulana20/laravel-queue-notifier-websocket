# laravel-queue-notifier-websocket
Example for notifying users when a background (job) process has been completed.

[sumber](https://github.com/nafiesl/laravel-queue-notifier-example)

## Getting Started

### Instalasi

1.  `$ git clone https://github.com/maulana20/laravel-queue-notifier-websocket`
2.  `$ composer install`
3.  Buat **.env** dari file **.env.example**
4.  `$ php artisan key:generate`
5.  `$ php artisan storage:link`
6.  `$ php artisan migrate`
7.  `$ php artisan serve`
8.  Open a new terminal tab `$ php artisan queue:work`
9.  Open a new terminal tab `$ php artisan websockets:serve`

### note

- register akun pada pusher untuk dapat app key [disini](https://dashboard.pusher.com/accounts/sign_in)
- kemudian refresh config
```bash
$ php artisan config:cache
$ php artisan cache:clear
```

### issue reference

- [SPA Santum](https://blog.codecourse.com/setting-up-laravel-sanctum-airlock-for-spa-authentication-with-vue/)
- [Broadcash Auth](https://github.com/tlaverdure/laravel-echo-server/issues/243#issuecomment-346349656)
- [Queue Job](https://stackoverflow.com/questions/42133628/laravel-queues-not-working)
