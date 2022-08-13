# Simple Web Store
Project for a web store that allows the user to view a list of products, add them to a cart, and checkout. This project was originally completed in Spring 2022 during my Junior year while taking my IT Degree. 

This was a group project. My role in the project was handling the overall structure (CodeIgniter 4 files). The other two members handled some of the HTML and CSS.

This project uses CodeIgniter 4 Framework for the MVC Pattern.

## How It Works

There are user views and admin views.

### User

The user will first be greeted with a log in or sign up page to make an account. They won't be able to access the website without being logged in.

Once logged in, the user will be presented with the homepage. They have the option of going to the products page. In the products page, they can choose from a list of products to add to a cart. The cart total is updated with each product added. Once the user is finished, they can checkout. In the checkout page, they are presented with the items they chose and the costs for each product. Once they confirm the items and costs, they can checkout / purchase. Afterwards, they are presented with a page showing they have completed their purchase.

### Admin 

The Admin will be greeted with the same page as the user on the homepage. However, an account logged in as admin will have an admin view presented. With this view, they have options for viewing products, as well as adding and editing products, and viewing sales.

The products, sales, and user accounts are stored in an external database. The project accesses the database using the framework's built in methods as well as using MySQLi.

## What We Learned While Working On This Project

- MVC Pattern and how it works
- How to use an MVC framework like CodeIgniter 4
- First usage of a CSS framework like Bootstrap
- PHP Sessions
- More ways to manipulate the DOM with jQuery

## Examples

Homepage (User)

![image](https://user-images.githubusercontent.com/107071736/184509813-b17911f0-a1e1-47f4-904c-c4bdb0c59158.png)

Homepage (Admin)

![image](https://user-images.githubusercontent.com/107071736/184509828-4a01a83c-11ec-42e3-9ec7-bae3326b7a33.png)

Sign Up Page 

![image](https://user-images.githubusercontent.com/107071736/184509850-1483713e-6f9b-4b55-91e9-bdbfd3eae400.png)

Product Example

![image](https://user-images.githubusercontent.com/107071736/184509876-d86cb9d1-058b-4834-8a99-3f57298d814f.png)

Cart

![image](https://user-images.githubusercontent.com/107071736/184509892-7ea3a7d7-66e7-4244-bb26-d47b87afdbe0.png)
