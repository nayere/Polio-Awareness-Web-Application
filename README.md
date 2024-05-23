# Polio Awareness Web Application

## Table of Contents
- [Project Description](#project-description)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgements](#acknowledgements)

## Project Description
The Polio Awareness Web Application is designed to raise awareness about polio and provide comprehensive information and resources to help eradicate the disease. This web application serves as an educational tool, offering insights into polio prevention, symptoms, vaccination efforts, and support mechanisms for affected individuals. The project aims to bridge the knowledge gap and empower users with the information needed to combat polio effectively.

## Technologies Used
- **Languages**: Python (backend), HTML, CSS, JavaScript (frontend)
- **Frameworks**: Flask (backend), Bootstrap (frontend)
- **Database**: PostgreSQL
- **Deployment**: Heroku
- **Libraries**: Chart.js (data visualization), Axios (API requests)

## Installation
To run the Polio Awareness Web Application locally, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/polio-awareness-webapp.git
    cd polio-awareness-webapp
    ```

2. **Set up a virtual environment**:
    ```bash
    python -m venv venv
    source venv/bin/activate  # On Windows, use `venv\Scripts\activate`
    ```

3. **Install dependencies**:
    ```bash
    pip install -r requirements.txt
    ```

4. **Set up the database**:
    Ensure you have PostgreSQL installed and running. Create a new database and update the `DATABASE_URL` in the `.env` file.
    ```bash
    export DATABASE_URL='postgresql://username:password@localhost:5432/polio_awareness_db'
    ```

5. **Run the application**:
    ```bash
    flask run
    ```

6. **Access the application**:
    Open your browser and navigate to `http://127.0.0.1:5000/`.

## Usage
Once the application is running, users can:
- Browse the landing page to learn about the project's goals.
- Access detailed information about polio, including prevention, symptoms, and vaccination.
- Use interactive tools and resources to track and support polio awareness efforts.

## Features
- **Educational Content**: Comprehensive information on polio prevention, symptoms, and vaccination.
- **Interactive Tools**: Features like vaccination tracking and data visualization to engage users.
- **User-friendly Design**: Clean and intuitive interface designed with Bootstrap.

## Contributing
We welcome contributions to the Polio Awareness Web Application. To contribute, follow these steps:

1. **Fork the repository**.
2. **Create a new branch**:
    ```bash
    git checkout -b feature-name
    ```
3. **Make your changes**.
4. **Commit your changes**:
    ```bash
    git commit -m "Description of changes"
    ```
5. **Push to the branch**:
    ```bash
    git push origin feature-name
    ```
6. **Create a pull request**.

Please ensure your code adheres to our coding standards and includes appropriate tests.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements
- Thanks to the open-source community for providing the tools and frameworks used in this project.
- Special thanks to all contributors and supporters of the project.

For any questions or feedback, please contact [Job Nayere](mailto:jobdavy64@outlook.com).

---
