# Stage 1: Build stage
FROM node:18 AS builder

WORKDIR /app

COPY src/package*.json ./

RUN npm install

COPY src/ .

RUN npm run build

# Stage 2: Production stage
FROM node:18-alpine

WORKDIR /app

COPY --from=builder /app/package*.json ./

# Install only production dependencies
RUN npm install --only=production

COPY --from=builder /app/index.js ./

EXPOSE 3000

CMD ["node", "index.js"]