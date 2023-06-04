#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in *.php; 
do
    php $f | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
    echo "Processing $f into ${f/.php/$html}..";
done

#Copy all .htaccess files
for f in *.htaccess; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

#Copy all PNG files
for f in *.png; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;

#Copy all .xml files
for f in *.xml; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;

#Copy all .ico files
for f in *.ico; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;

#Copy all .txt files
for f in *.txt; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;

#Copy all .svg files
for f in *.svg; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;

#Copy all .webmanifest files
for f in *.webmanifest; 
do
    cat $f > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;