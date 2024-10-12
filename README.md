# Freelance Hours

## About the project
This project concept consists in a hub where users can register projects and developers can place proposals to act in this project.
The proposals are listed in an ascending order where the lowest hours planned is best.

Made with Laravel, Livewire and Tailwind

### Development Status

- [ ] Users
    - [ ] Register
    - [ ] Login
    - [ ] Profile Management
- [ ] Projects
    - [x] List
    - [x] Specific Project Page
    - [ ] Register
    - [ ] Early Close
    - [ ] Management
    - [x] Notification on new proposal
- [x] Proposals
    - [x] Register
    - [x] Update
    - [x] List inside Project
    - [x] Ranking

Some tasks may include more information than provided above, the project might also be updated in the future to include more tasks.

## How to run

1. Clone the project
2. Install dependencies
```
composer install
npm install
```

3. Execute your web server (to make it easier, I suggest using Artisan)
```
php artisan serve
```

4. Initialize the tailwind compiler so the CSS changes be available
```
npm run dev
```