FROM postgres:15

# Copy the SQL script to the /docker-entrypoint-initdb.d/ directory
# Any SQL files in this directory will be automatically executed when
# the container is first started
COPY init/init-db.sql /docker-entrypoint-initdb.d/

# Set environment variables
ENV POSTGRES_PASSWORD=postgres
ENV POSTGRES_USER=postgres
ENV POSTGRES_DB=postgres

# Expose PostgreSQL port
EXPOSE 5432