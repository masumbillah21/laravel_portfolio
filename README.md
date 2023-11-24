# Assignment 09

Your task is to create a personal portfolio website using Laravel. This portfolio should showcase your skills, projects, and any other relevant information. The project will involve creating a multi-page website with a consistent layout, navigation bar, footer, and social media integration.

## Instructions to use this project on your local/server

1. Run git clone https://github.com/masumbillah21/laravel_portfolio.git
2. Run ``` cd laravel_portfolio ```
2. Run ``` composer install ```
3. Run ``` cp .env.example .env ```
    - Create a database
    - In .env file add your database login credentials 
    - Add APP_NAME & APP_URL
4. Run ``` php artisan key:generate ```
5. Run ``` php artisan migrate:refresh --seed ```
6. Run ``` php artisan serve ```
7. Go to your site link. (For localhost: http://127.0.0.1:8000/)

# Live Site: http://laraportfolio.masum-billah.com/


## Requirements:

1.    Laravel Setup:
    * Set up a new Laravel project using Composer.
    * Configure your database connection in the .env file.

2. Database (Optional):
    * If you want to include a section for projects or blog posts, you can use a database to store this information. Create a migration and seed some sample data.

3. Blade Layouts:
    * Utilize Blade layouts to create a consistent structure for your website.
    * Implement a master layout that includes a common structure for the head, navigation bar, content area, and footer.

4. Navigation Bar:
    * Create a navigation bar that is consistent across all pages.
    * Include links to navigate between different sections of your portfolio (Home, About Me, Projects, Contact).

5. Content Sections:
    * Implement separate Blade views for different sections of your portfolio (Home, About Me, Projects, Contact).
    * Use the @yield directive to inject content into specific sections of the master layout.

6. Home Page:
    * Design a visually appealing home page that introduces yourself.
    * Include a call-to-action or a brief summary of your skills.

7.  About Me:
    * Create a page with detailed information about yourself, your background, and skills.
    * Include a section for your education, work experience, and any certifications.

8.  Projects:
    * If you are using a database, dynamically fetch and display projects on this page.
    * Otherwise, manually create cards or sections to showcase a few of your notable projects.

9. Contact Page:
    * Design a contact page with a form that allows visitors to reach out to you.
    * Include fields for name, email, message, etc.
    * If possible, implement form validation.

10. Footer:
    * Create a footer that contains links to your social media profiles (GitHub, LinkedIn, Twitter, etc.).
    * Add social media icons for each profile.

12. Styling:
    * Apply consistent styling using CSS or a front-end framework (e.g., Bootstrap) to make your portfolio visually appealing.