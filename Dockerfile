FROM mcr.microsoft.com/dotnet/core/sdk:3.1-alpine AS dotnet-build
WORKDIR /app
COPY runtime .
RUN sh compile_linux.sh

FROM node:12-alpine
RUN apk add --no-cache openjdk11 python2 make g++ icu libintl

WORKDIR /usr/src/app
COPY package*.json ./

RUN npm ci --prod

COPY . .
COPY --from=dotnet-build /app/dist/ runtime/dist/

ENV PATH="/usr/lib/jvm/java-11-openjdk/bin:$PATH"

EXPOSE 3000
CMD [ "npm", "start" ]
