<?php
// Database connection

// Get the user's message from the POST request
$userMessage = isset($_POST['Message']) ? trim(htmlspecialchars($_POST['Message'])) : '';

// Simple chatbot logic
$response = '';

// Process the message and determine the bot's response
if (!empty($userMessage)) {
    $userMessage = strtolower($userMessage);  // Convert message to lowercase for easy matching

    if (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'hie') !== false || strpos($userMessage, 'hi') !== false) {
        $response = 'Hi there! How can I help you today?';
    } elseif (strpos($userMessage, 'how are you') !== false || strpos($userMessage, 'how are things') !== false) {
        $response = 'I am doing great! Thank you for asking. How about you?';
    } elseif (strpos($userMessage, 'fine') !== false || strpos($userMessage, 'good') !== false || strpos($userMessage, 'okay') !== false) {
        $response = 'I’m glad to hear that! Is there anything you’d like to discuss or need help with?';
    } elseif (strpos($userMessage, 'services') !== false || strpos($userMessage, 'sell') !== false || strpos($userMessage, 'items') !== false) {
        $response = 'We offer different services such as books, clothes, fancy gadgets, and more. Would you like to hear some more?';
    } elseif (strpos($userMessage, 'not fine') !== false || strpos($userMessage, 'not okay') !== false || strpos($userMessage, 'sick') !== false) {
        $response = 'I’m sorry to hear that. What seems to be the problem? I’ll try to help in any way I can.';
    } elseif (strpos($userMessage, 'headache') !== false) {
        $response = 'For a headache, I recommend resting in a quiet place, drinking plenty of water, and taking paracetamol if it’s severe. If it persists, please see a doctor.';
    } elseif (strpos($userMessage, 'fever') !== false) {
        $response = 'For a fever, stay hydrated and take paracetamol. Monitor your temperature, and if it gets too high, seek medical attention immediately.';
    } elseif (strpos($userMessage, 'thank you') !== false || strpos($userMessage, 'thanks') !== false) {
        $response = 'You’re welcome! I’m here to help whenever you need.';
    } elseif (strpos($userMessage, 'what is your name') !== false || strpos($userMessage, 'who are you') !== false) {
        $response = 'My name is Guts. I’m your friendly assistant! How can I be of service today?';
    } elseif (strpos($userMessage, 'bye') !== false || strpos($userMessage, 'goodbye') !== false) {
        $response = 'Goodbye! Take care and stay safe!';
    } elseif (strpos($userMessage, 'what\'s wrong') !== false || strpos($userMessage, 'how can I help') !== false) {
        $response = 'Thank you for asking! I’m here to assist with any questions or issues you have. How can I support you?';
    } elseif (strpos($userMessage, 'iwe') !== false || strpos($userMessage, 'ase') !== false) {
        $response = 'machende ako';
    } else {
        $response = 'Sorry, I didn’t understand that. Can you please rephrase? I want to help.';
    }
}

// Return the bot's response back to the frontend
echo json_encode(['response' => $response]);
?>
