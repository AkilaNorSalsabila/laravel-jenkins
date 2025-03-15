pipeline {
    agent any

    tools {
        nodejs "NodeJS 23" // Sesuaikan dengan nama yang kamu buat di Global Tool Configuration
    }

    stages {
        stage('Checkout Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/AkilaNorSalsabila/laravel-jenkins.git'
            }
        }

        stage('Setup NodeJS') {
            steps {
                script {
                    def nodejs = tool name: 'NodeJS 23', type: 'jenkins.plugins.nodejs.tools.NodeJSInstallation'
                    env.PATH = "${nodejs}/bin:${env.PATH}"
                }
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'npm install'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'npm test' // Sesuaikan jika ada perintah lain untuk menjalankan test
            }
        }

        stage('Build and Archive') {
            steps {
                sh 'npm run build'
                archiveArtifacts artifacts: 'dist/**', fingerprint: true
            }
        }
    }
}
