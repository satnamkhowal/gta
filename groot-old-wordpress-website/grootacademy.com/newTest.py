import os

# Directory containing the uploaded files
directory = "D:/xampp/htdocs/Groot-Academy-Website-New/"

# List to hold all the file names
file_names = []

# Walk through directory and subdirectories
for root, dirs, files in os.walk(directory):
    # Ignore the 'wp-admin' directory
    if 'wp-admin' in dirs:
        dirs.remove('wp-admin')
    
    for file in files:
        # Append the relative path of the file to the list
        file_names.append(os.path.relpath(os.path.join(root, file), directory))

# Generate the HTML content
html_content = """<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index of Files</title>
</head>
<body>
    <h1>Index of Files</h1>
    <ul>
"""

# Add each file as a link in the HTML
for file_name in file_names:
    html_content += f'        <li><a href="{file_name}">{file_name}</a></li>\n'

html_content += """    </ul>
</body>
</html>
"""

# Save the HTML content to an index.html file
output_path = "D:/xampp/htdocs/Groot-Academy-Website-New/all.html"
with open(output_path, "w") as html_file:
    html_file.write(html_content)

output_path
