<?php
# Including all the required scripts for demo
require __DIR__ . "/discord.php"; //!Includes Link
require "../../config.php"; //!Includes Link

# Initializing all the required values for the script to work
init($redirect_url, $client_id, $secret_id, $bot_token);

# Fetching user details | (identify scope)
get_user();

# Redirecting to home page once all data has been fetched
header('Location: ../../');
exit;