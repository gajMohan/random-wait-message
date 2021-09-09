# random-wait-message

Simple PHP package to generate random fun wait messages

# Usage

## Get a random message

```
    echo RandomWaitMessage::getMessageString();
    // "Put your headphones on and have a personal dance party 🎶💃🕺"
    
    # without an emoji
    echo RandomWaitMessage::getMessageString(false);
    // "Catch up on the 16,527 unread emails you have"
```

## Get a random Message as an array

```
    print_r(RandomWaitMessage::getMessageArray());
    // ['message' => 'Meditate', 'emoji' => '🧘‍']
```

## Get all random messages

```
    print_r(RandomWaitMessage::getAllMessage());
    // [['message' => 'Pretend you are a ninja', 'emoji' => '🥷🏻‍'],...]
```

## Include Custom Messages

```
    $customMessage = Message::newMessage('Fork this repo', '🍴');
    $secondCustomMessage = Message::newMessage('Make a PR', '👩‍💻');
    
    # single message
    RandomWaitMessage::getMessageString($includeEmoji = true, $customMessage, $secondCustomMessage...);
    
    # single message array
    RandomWaitMessage::getMessageArray($customMessage, $secondCustomMessage...);
    
    # all messages
    RandomWaitMessage::getAllMessage($customMessage, $secondCustomMessage...)
```
