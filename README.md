Steps to reproduce the issue:

### Installation
1. Run `git clone git@github.com:jeffreyvanhees/filament-model-states-bug.git`
2. Run `cd filament-model-states-bug`
3. Run `composer install`
4. Run `php artisan migrate --seed`
5. Run `php artisan serve`

Go to the following URL:  http://127.0.0.1:8000/admin

### Credentials:
- Email: admin@example.com
- Password: password

### Issue
Try to attach one or multiple regions to a restaurant. After that, edit the attached region and you'll 
see a `LogicException` is thrown. This is because the state-attribute from the pivot has not been casted
as a State object but as a string.
