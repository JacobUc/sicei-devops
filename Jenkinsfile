pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                // Construir Imagen Docker
                echo 'Building...'
                pwsh "docker build -t sicei:${BUILD_ID} ."
            }
        }

        stage('Deploy') {
            steps {
                // Construir Contenedor
                echo 'Deploying...'
                pwsh """
                    if (docker ps -q --filter "name=sicei-app") { 
                        docker stop sicei-app
                        docker rm sicei-app 
                    }
                """
                pwsh "docker run -d -p 8000:8000 --name sicei-app sicei:${BUILD_ID}"
                echo 'Done'
            }
        }
    }
}