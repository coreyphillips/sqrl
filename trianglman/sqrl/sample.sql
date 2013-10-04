CREATE TABLE `sqrl_nonce` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY,
    `nonce` CHAR(64) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE (`nonce`)
);

CREATE TABLE `sqrl_pubkey` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY,
    `public_key` CHAR(64) NOT NULL,
    UNIQUE (`key_fingerprint`)
);