<?php
    $songs = [
        1 => [
        'title' => 'Every Breath You Take',
        'author' => 'The Police'

        ],
        2 => [
        'title' => 'Knives Out',
        'author' => 'Radiohead'

        ],
        3 => [
        'title' => 'Machine',
        'author' => 'Logistic'
        ],
    ];

    function showAllSongs($songs){
        foreach ($songs as $id => $song){
            displaySong($id, $song) . "\n";
        }
    }

    function addNewSong($songs){
        $title = readLine("Enter title: ");
        $author = readLine("Enter author: ");
        $songs[] = ['title' => $title, 'author' => $title];
        echo "Song added successfully!\n";
    }

    function deleteSong($songs){
        $id = readLine("Enter book ID you want to delete: ");
        if (isset($songs[$id])) {
            unset($songs[$id]);
            echo "Song with ID $id has been deleted.\n";
        } else {
            echo "Song with ID $id does not exist.\n";
        }
    }

    function displaySong($id, $song) {
        echo "ID: {$id} // Title: ". $song['title'] . " // Author: " . $author['author']. "\n\n";
    }
    

    function editSong(&$songs){
        $id = readline("Enter the song ID you want to edit: ");
        if (isset($songs[$id])) {
            echo "Editing Song: " . $songs[$id]['title'] . " by " . $songs[$id]['author'] . "\n";

            $newTitle = readline("Enter new title (leave blank to keep current): ");
            $newAuthor = readline("Enter new author (leave blank to keep current): ");
            
            if (!empty($newTitle)) {
            $songs[$id]['title'] = $newTitle;
            }
            if (!empty($newAuthor)) {
            $songs[$id]['author'] = $newAuthor;
            }
            
            echo "Song with ID $id has been updated.\n";
            } else {
            echo "Song with ID $id does not exist.\n";
        }
    }

    echo "\n\nWelcome to the Music Library\n";
    $continue = true; 
    do {
        echo "\n\n";
        echo "1 - show all songs\n";
        echo "2 - add a song\n";
        echo "3 - delete a song\n";
        echo "4 - edit a song\n";
        echo "5 - quit\n\n";
        $choice = readline();

        switch ($choice) {
            case 1:
                showAllSongs($songs);
                break;
            case 2:
                addNewSong($songs);
                break;
            case 3:
                deleteSong($songs);
                break;
            case 4:
                editSong($choice);
                break;
            case 5:
                echo "Goodbye!\n";
                $continue = false;
                break;
            case 10:
                print_r($songs); 
                break;
            default:
                echo "Invalid choice\n";
        };

}   while ($continue == true);

