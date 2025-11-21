# E-commerce Backend with Laravel

## Overview

This project is a robust and scalable e-commerce backend built with the Laravel framework. It provides a complete data model for an online store, including users, products, categories, orders, payments, and more. The backend is designed to be the foundation for a full-featured e-commerce application, with a focus on performance, security, and maintainability.

## Project Outline

### Models and Relationships

The following models and their relationships have been implemented:

*   **User**:
    *   Represents users of the application, who can be customers, vendors, or admins.
    *   Has a `role` attribute to distinguish between user types.
    *   Has many `Orders`, `Reviews`, and `Notifications`.
    *   A `User` can have one `Vendor` profile.
*   **Product**:
    *   Represents a product in the store.
    *   Belongs to a `Category` and a `Vendor`.
    *   Has many `OrderItems` and `Reviews`.
*   **Category**:
    *   Represents a category of products.
    *   Has many `Products`.
*   **Vendor**:
    *   Represents a seller on the platform.
    *   Belongs to a `User`.
    *   Has many `Products`.
*   **Order**:
    *   Represents a customer's order.
    *   Belongs to a `User`.
    *   Has many `OrderItems`.
    *   Has one `Payment`.
*   **OrderItem**:
    *   Represents a single item within an order.
    *   Belongs to an `Order` and a `Product`.
*   **Payment**:
    *   Represents a payment for an order.
    *   Belongs to an `Order`.
*   **Review**:
    *   Represents a customer's review of a product.
    *   Belongs to a `User` and a `Product`.
*   **Notification**:
    *   Represents a notification for a user.
    *   Belongs to a `User`.

### Database Seeding

The database has been seeded with dummy data for all models using factories. This provides a realistic development environment for building and testing features.

### Frontend

The frontend is built with Blade and Tailwind CSS. The landing page has been created with a hero section and a featured products section. The product details page has also been created.

## Plan and Steps for Current Change (Initial Setup)

1.  **Create Migrations**: Create the necessary database migrations for all models.
2.  **Create Models**: Create the Eloquent models with their relationships.
3.  **Create Factories**: Create model factories to generate dummy data.
4.  **Create Seeders**: Create database seeders to populate the database.
5.  **Run Migrations and Seeders**: Run the migrations and seeders to set up the database.
6.  **Debug and Fix**: Debug and fix any issues that arise during the seeding process.
7.  **Create `blueprint.md`**: Create a `blueprint.md` file to document the project.
8.  **Install Frontend Dependencies**: Install the necessary frontend dependencies with `npm install`.
9.  **Create Landing Page**: Create a new landing page with a hero section and a featured products section.
10. **Create Product Details Page**: Create a product details page to display information about a single product.
