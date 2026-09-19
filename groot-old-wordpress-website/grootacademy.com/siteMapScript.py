import os
import xml.etree.ElementTree as ET
from datetime import datetime

def generate_sitemap(directory, base_url, skip_folders=None):
    if skip_folders is None:
        skip_folders = []

    # Create the root element of the XML
    urlset = ET.Element('urlset')
    urlset.set('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9')
    
    # Walk through the directory and subdirectories
    for root, dirs, files in os.walk(directory):
        # Skip folders that are in the skip_folders list
        dirs[:] = [d for d in dirs if os.path.relpath(os.path.join(root, d), directory) not in skip_folders]
        
        for file in files:
            if file.endswith(('.html', '.php')):
                # Create a URL entry
                url = ET.SubElement(urlset, 'url')
                
                # Construct the relative file path and replace backslashes with forward slashes
                rel_path = os.path.relpath(os.path.join(root, file), directory).replace('\\', '/')
                
                # Add the loc element
                loc = ET.SubElement(url, 'loc')
                loc.text = f'{base_url}/{rel_path}'
                
                # Add the lastmod element
                lastmod = ET.SubElement(url, 'lastmod')
                lastmod.text = datetime.fromtimestamp(os.path.getmtime(os.path.join(root, file))).strftime('%Y-%m-%d')
                
                # Add the changefreq element (optional)
                changefreq = ET.SubElement(url, 'changefreq')
                changefreq.text = 'weekly'
                
                # Add the priority element (optional)
                priority = ET.SubElement(url, 'priority')
                priority.text = '0.5'
    
    # Create a tree from the root element
    tree = ET.ElementTree(urlset)
    
    # Save the sitemap to a file
    output_path = os.path.join(directory, './', 'sitemap.xml')
    tree.write(output_path, xml_declaration=True, encoding='utf-8', method='xml')
    
    return output_path

# Usage
skip_folders = ['blog','assets','assets2','images2','images','includes','includes2']
sitemap_path = generate_sitemap('D:/xampp/htdocs/groot-new', 'https://grootacademy.com', skip_folders)
sitemap_path
