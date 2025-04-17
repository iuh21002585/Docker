-- Create a custom database
CREATE DATABASE dockerdemo;

-- Connect to the created database
\c dockerdemo;

-- Create a table
CREATE TABLE demo_table (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert some sample data
INSERT INTO demo_table (name, description) VALUES 
('Docker', 'Container platform'),
('PostgreSQL', 'Advanced open source database');

-- Grant privileges
GRANT ALL PRIVILEGES ON DATABASE dockerdemo TO postgres;