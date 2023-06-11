<?php
/*
$redisHost = 'redis-14337.c301.ap-south-1-1.ec2.cloud.redislabs.com';
$redisPort = 14337;
$redisPassword = 'Devo@9009';
*/
try {
    // Connecting to Redis
    $redis = new Redis();
    //Connecting to Redis
    $redis->connect('redis-14337.c301.ap-south-1-1.ec2.cloud.redislabs.com', 14337);
    $redis->auth('Devo@9009');
}

catch (Exception $e) {
    throw new Exception('Redis connection error: ' . $e->getMessage());
}