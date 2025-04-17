FROM redis:latest

# Copy custom Redis configuration file
COPY config/redis.conf /usr/local/etc/redis/redis.conf

# Expose Redis port
EXPOSE 6379

# Command to run Redis with our custom configuration
CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]