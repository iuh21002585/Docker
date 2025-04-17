FROM python:3.9

WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY app/ .

# Set the environment variable
ENV APP_ENV=development

CMD ["python", "app.py"]