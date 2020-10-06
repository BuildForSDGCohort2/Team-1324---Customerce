<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'title'                 => 'Title',
            'title_helper'          => '',
            'stripe_plan_id'        => 'Stripe Plan ID',
            'stripe_plan_id_helper' => '',
            'price'                 => 'Price',
            'price_helper'          => '',
            'permissions'           => 'Permissions',
            'permissions_helper'    => '',
            'created_at'            => 'Created at',
            'created_at_helper'     => '',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => '',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'country'        => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'short_code'        => 'Short Code',
            'short_code_helper' => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'invoice'        => [
        'title'          => 'Invoices',
        'title_singular' => 'Invoice',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => '',
            'customer_name'         => 'Customer',
            'customer_name_helper'  => '',
            'invoice_date'          => 'Invoice date',
            'invoice_date_helper'   => '',
            'invoice_amount'        => 'Invoice amount',
            'invoice_amount_helper' => '',
        ],
    ],
    'customer'       => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
        ],
    ],
    'clients'        => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
    ],
    'products'        => [
        'title'          => 'Products',
        'title_singular' => 'Product',
    ],
    'payments'        => [
        'title'          => 'Payments',
        'title_singular' => 'Payment',
    ],
    'pos'        => [
        'title'          => 'POS',
        'title_singular' => 'POS',
    ],
    'expense'        => [
        'title'          => 'Expenses',
        'title_singular' => 'Expense',
        ],
    'income'        => [
        'title'          => 'Incomes',
        'title_singular' => 'Income',
    ],
    'notes'        => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
    ],
];
