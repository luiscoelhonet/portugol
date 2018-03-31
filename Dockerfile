FROM starlabio/ubuntu-nodejs-build:1.3

# Create app directory
WORKDIR /usr/src/app

# Install app dependencies
# A wildcard is used to ensure both package.json AND package-lock.json are copied
# where available (npm@5+)
COPY package*.json ./

RUN apt-get update --quiet && \
    apt-get install software-properties-common npm -y --quiet

# Install NetCore
RUN apt-get install curl libunwind8 gettext apt-transport-https -y && \
    curl https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > microsoft.gpg && \
    mv microsoft.gpg /etc/apt/trusted.gpg.d/microsoft.gpg && \
    sh -c 'echo "deb [arch=amd64] https://packages.microsoft.com/repos/microsoft-ubuntu-xenial-prod xenial main" > /etc/apt/sources.list.d/dotnetdev.list' && \
    apt-get update --quiet && \
    apt-get install dotnet-sdk-2.1.4 -y --quiet

# Install Java-8
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C2518248EEA14886 E074D16EB6FF4DE3 >/dev/null && \
    add-apt-repository ppa:webupd8team/java -y && \
    apt-get update --quiet && \
    echo "oracle-java8-installer shared/accepted-oracle-license-v1-1 select true" | debconf-set-selections && \
    apt-get install -y oracle-java8-installer ant --quiet

# Fix certificate issues
RUN apt-get install ca-certificates-java -y --quiet && \
    apt-get clean --quiet && \
    update-ca-certificates -f;

# Setup JAVA_HOME -- useful for docker commandline
ENV JAVA_HOME /usr/lib/jvm/java-8-openjdk-amd64/
RUN export JAVA_HOME

RUN npm install >/dev/null
# If you are building your code for production
# RUN npm install --only=production

# Bundle app source
COPY . .

EXPOSE 3000
CMD [ "npm", "start" ]