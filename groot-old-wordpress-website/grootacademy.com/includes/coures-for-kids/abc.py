import os

# Define the base path where the folders and files will be created
base_path = 'kids_courses/'

# Define the course structure as a dictionary
course_structure = {
    'beginner-level-courses': {
        'programming-or-coding-courses-for-kids': [
            'c-programming',
            'c++-programming',
            'java',
            'python'
        ],
        'web-designing': [],
        'designing-and-animation': {
            'graphic-designing': [
                'adobe-photoshop',
                'canva',
                'adobe-illustrator'
            ],
            'web-designing': [],
            'video-editing': [],
            'animation': []
        }
    },
    'frontend-development': {
        'ui-ux': [],
        'web-development-with-php': [],
        'web-development-with-python': [],
        'web-development-with-java': [],
        'web-development-with-node-js': []
    },
    'advanced-development': {
        'javascript': [],
        'data-structures-and-algorithms': [],
        'game-development': [],
        'react': [],
        'vue-js': [],
        'angular-js': []
    },
    'advanced-courses-after-python': {
        'data-analytics': [],
        'data-science': [],
        'machine-learning': [],
        'ai': [],
        'problem-solving': []
    },
    'ai-tool-courses': {
        'promat-engineering': [],
        'advanced-video-editing-with-ai-tools': []
    }
}

# Function to create directories and index.php files
def create_structure(path, structure):
    for folder, subfolders in structure.items():
        folder_path = os.path.join(path, folder)
        os.makedirs(folder_path, exist_ok=True)
        # Create an empty index.php file in the folder
        with open(os.path.join(folder_path, 'index.php'), 'w') as f:
            f.write(f'<?php // {folder} ?>')
        # Recursively create subfolders
        if isinstance(subfolders, dict):
            create_structure(folder_path, subfolders)
        elif isinstance(subfolders, list):
            for subfolder in subfolders:
                subfolder_path = os.path.join(folder_path, subfolder)
                os.makedirs(subfolder_path, exist_ok=True)
                with open(os.path.join(subfolder_path, 'index.php'), 'w') as f:
                    f.write(f'<?php // {subfolder} ?>')

# Create the directory structure and files
create_structure(base_path, course_structure)

print("Folders and files created successfully!")
