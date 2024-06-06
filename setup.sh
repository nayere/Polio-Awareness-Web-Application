#!/bin/bash

# Check if the script is being run on Windows or Unix-like system
if [[ "$OSTYPE" == "msys" ]]; then
    ACTIVATE_SCRIPT='venv\Scripts\activate'
else
    ACTIVATE_SCRIPT='source venv/bin/activate'
fi

# Set up a virtual environment
echo "Setting up virtual environment..."
python -m venv venv

# Activate the virtual environment
echo "Activating virtual environment..."
eval $ACTIVATE_SCRIPT

# Install dependencies
echo "Installing dependencies..."
pip install -r requirements.txt

# Set up the database
echo "Setting up the database..."
export DATABASE_URL='postgresql://username:password@localhost:5432/polio_awareness_db'

# Run the application
echo "Running the application..."
flask run

# Instructions to access the application
echo "Access the application by navigating to http://127.0.0.1:5000/ in your web browser."
