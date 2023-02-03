/**
  MIGRATE abilities
 */
INSERT INTO `abilities`(`id`, `name`, `description`, `created_at`, `updated_at`)
SELECT `id`, `permission`, `description`, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP FROM `bensu-ci`.`permission`;

/**
  MIGRATE users
 */
INSERT INTO `users`(`id`, `email`, `email_verified_at`, `password`, `phone`, `first_name`, `last_name`, `gender`, `photo`, `address`, `type`, `role_id`, `notifiable`, `login_count`, `last_login`, `banned_until`, `meta`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_at`)
SELECT `user_id`, `email`, IF(_email_verified, created, NULL), `password`, `phone`, `fname`, `lname`, `gender`, `photo`, `address`, `user_type`, NULL, 0, login_count, last_login, IF(status, NULL, '2123-01-01 00:00:00'), `meta`, NULL, `created`, updated, `created_by`, `updated_by`, IF(is_deleted, updated, NULL) FROM `bensu-ci`.`user`;


/**
  MIGRATE brands
 */
INSERT INTO `brands`(`id`, `name`, `image`, `slug`, `created_by`, `updated_by`, `created_at`, `updated_at`)
SELECT `brand_id`, `brand_name`, `brand_img`, `slug`, `created_by`, `updated_by`, `created`, `updated` FROM `bensu-ci`.`brand`;
