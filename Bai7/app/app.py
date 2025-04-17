import os

# Get the environment variable
app_env = os.environ.get('APP_ENV', 'No environment variable set')

print(f"Application environment: {app_env}")
print("This application demonstrates environment variables in Docker.")