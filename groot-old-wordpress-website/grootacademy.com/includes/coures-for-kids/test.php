<?php

// Define the base path where the folders and files will be created
$basePath = __DIR__ . '.';

// Define the course structure as an associative array
$courseStructure = [
    'Bigner_Leve_Courses' => [
        'Programming_or_Coding_Coures_for_kids' => [
            'C_Programming',
            'C++_Programming',
            'Java',
            'Python'
        ],
        'Web_Desining' => [],
        'Designing_and_Animation' => [
            'Graphics_Designing' => [
                'Adobe_Photoshop',
                'Canva',
                'Adobe_Illustrator'
            ],
            'Web_Designing',
            'Video_Editing',
            'Animation'
        ]
    ],
    'Frontend_Development' => [
        'UI_UX',
        'Web_Development_with_PHP',
        'Web_Development_with_Python',
        'Web_Development_with_Java',
        'Web_Development_with_Node_js'
    ],
    'Advanced_Development' => [
        'Java_Script',
        'Data_Structure_and_algorithm',
        'Game_Development',
        'React',
        'Vue_JS',
        'Angular_JS'
    ],
    'Advance_Coures_After_Python_Courses' => [
        'Data_Analytics',
        'Data_Science',
        'Machine_Learning',
        'AI',
        'Problem_Solving'
    ],
    'AI_tool_Coures' => [
        'Promat_Engineering',
        'Advance_Video_editing_coures_with_AI_Tools'
    ]
];

// Function to create directories and files
function createStructure($path, $structure) {
    foreach ($structure as $folder => $subfolders) {
        $folderPath = $path . $folder;
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
            // Create an index.php file inside each folder
            file_put_contents($folderPath . '/index.php', '<?php // ' . $folder . ' ?>');
        }
        if (is_array($subfolders)) {
            createStructure($folderPath . '/', $subfolders);
        }
    }
}

// Create the directory structure and files
createStructure($basePath, $courseStructure);

echo "Folders and files created successfully!";
?>
