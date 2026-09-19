import os

directory = 'C:/xampp/htdocs/Groot-Academy-Website-New'

for root, dirs, files in os.walk(directory):
    # Skip the wp-admin directory
    if 'wp-admin' in dirs:
        dirs.remove('wp-admin')
    for file in files:
        print(os.path.join(root, file))
