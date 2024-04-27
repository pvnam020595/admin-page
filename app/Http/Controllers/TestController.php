<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aws\Exception\AwsException;
use Aws\Sns\SnsClient;
use Illuminate\Support\Facades\Log;
use Aws\Sqs\SqsClient;

class TestController extends Controller
{
    //
    public function testSns() {
        $SnSclient = new SnsClient([
            // 'profile' => 'multiple-sub',
            'region' => 'us-east-1',
            'version' => '2010-03-31',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ]
        ]);
        
        $topic = 'arn:aws:sns:us-east-1:061310583138:multiple-sub';
        $message = [
            'event' => 'test',
            'message' => 'test push sns',
        ];
        $message = json_encode($message);
        try {
            $nam = $SnSclient->publish([
                'TargetArn'        => $topic,
                'Message'          => $message,
                // 'MessageStructure' => 'json',
          ]);
            var_dump($SnSclient);
        } catch (AwsException $e) {
            // output error message if fails
            Log::info($e->getMessage());
        }
    }
    public function testSqs() {
        $SqsClient = new SqsClient([
            // 'profile' => 'default',
            'region' => 'us-east-1',
            // 'version' => '2010-03-31',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ]
        ]);
        
        try {
            $queueUrl = 'https://sqs.us-east-1.amazonaws.com/061310583138/MyFistQueue';
            $result = $SqsClient->receiveMessage([
                'AttributeNames' => ['SentTimestamp'],
                'MaxNumberOfMessages' => 1,
                'MessageAttributeNames' => ['All'],
                'QueueUrl' => $queueUrl, // REQUIRED
                'WaitTimeSeconds' => 20,
            ]);
            print_r($result['Messages'][0]);
        } catch (AwsException $e) {
            // output error message if fails
            Log::info($e->getMessage());
        }
    }
}
